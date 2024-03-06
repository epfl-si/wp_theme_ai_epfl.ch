SHELL := /bin/bash
VERSION := $(shell cat _theme_info.txt | grep 'Version:' | awk '{print $$2}')
JASON_THEME := JasonsTheme
THEME_BRANCH := feature/h1-h6

.PHONY: help
## Print this help (see <https://gist.github.com/klmr/575726c7e05d8780505a> for explanation)
help:
	@echo "$$(tput bold)Available rules (alphabetical order):$$(tput sgr0)";sed -ne"/^## /{h;s/.*//;:d" -e"H;n;s/^## //;td" -e"s/:.*//;G;s/\\n## /---/;s/\\n/ /g;p;}" ${MAKEFILE_LIST}|LC_ALL='C' sort -f |awk -F --- -v n=$$(tput cols) -v i=20 -v a="$$(tput setaf 6)" -v z="$$(tput sgr0)" '{printf"%s%*s%s ",a,-i,$$1,z;m=split($$2,w," ");l=n-i;for(j=1;j<=m;j++){l-=length(w[j])+1;if(l<= 0){l=n-i-length(w[j])-1;printf"\n%*s ",-i," ";}printf"%s ",w[j];}printf"\n";}'

.PHONY: clean
## Clean every files that are created from elsewhere
clean:
	rm -rf "${JASON_THEME}"
	rm -rf assets/*
	rm style.css || true

.PHONY: all
## Run everything (from clean to ...)
all:
	$(MAKE) clean
	$(MAKE) version
	$(MAKE) mockup
	$(MAKE) copy-assets
	$(MAKE) change-logo-url
	$(MAKE) add-theme-info

.PHONY: version
## Display the current theme's version
version:
	@echo ${VERSION}

## Clone or update, and build the Jason's mockup theme
mockup:
	if [ -d ${JASON_THEME} ]; then \
		echo "Directory exists, update."; \
		cd "${JASON_THEME}"; \
		git pull --rebase --autostash; \
		cd ..; \
	else \
		echo "Directory do not exists, clone."; \
		git clone -b ${THEME_BRANCH} git@github.com:epfl-si/epfl-ai-center-ui.git "${JASON_THEME}" || true; \
	fi

	if grep -q "${JASON_THEME}" .gitignore; then \
		echo "${JASON_THEME} already exists in .gitignore"; \
	else \
		echo "${JASON_THEME}" >> .gitignore;\
	fi
	cd "${JASON_THEME}"; \
	git pull --rebase --autostash; \
	npm i; \
	npm run build

## Retrieve parts of the theme's assets
copy-assets:
	# styles
	cp ./${JASON_THEME}/dist/assets/main-*.css ./style.css
	# logos
	rm ./assets/logo-*.svg || true
	cp ./${JASON_THEME}/dist/assets/logo-*.svg ./assets/
	mv ./assets/logo-reverse-*.svg ./assets/logoreverse.svg
	mv ./assets/logo-*.svg ./assets/logo.svg
	mv ./assets/logoreverse.svg ./assets/logo-reverse.svg

	# hero-home
	cp ./${JASON_THEME}/dist/assets/hero-home-*.jpg ./assets/hero-home.jpg

## Ensure path to elements match the theme
change-logo-url:
	# https://stackoverflow.com/a/28592391/960623
	if [ "$$(uname -s)" == "Darwin" ]; then \
		sed -i "" -E 's|url\(/assets/logo-(.{8})\.svg|url\(/wp-content/themes/theme_ai_center/assets/logo.svg|g' style.css; \
		sed -i "" -E 's|url\(/assets/logo-reverse-(.{8})\.svg|url\(/wp-content/themes/theme_ai_center/assets/logo-reverse.svg|g' style.css; \
	else \
		sed -i -E 's|url\(/assets/logo-(.{8})\.svg|url\(/wp-content/themes/theme_ai_center/assets/logo.svg|g' style.css; \
		sed -i -E 's|url\(/assets/logo-reverse-(.{8})\.svg|url\(/wp-content/themes/theme_ai_center/assets/logo-reverse.svg|g' style.css; \
	fi

## Add theme's info to style.css
add-theme-info:
	@if grep -q "Author URI: https://go.epfl.ch/isas-fsd" style.css; then \
		echo "style.css already have theme info.";\
	else \
		THEME_INFO=$$(cat _theme_info.txt); \
		echo "$$THEME_INFO$$(cat style.css)" > style.css; \
	fi
