mockup: 
	# git clone git@github.com:jsnrynlds/epfl-ai-center-ui.git JasonsTheme || true
	git clone git@github.com:epfl-si/epfl-ai-center-ui.git JasonsTheme || true
	if grep -q "JasonsTheme" .gitignore;then echo "JasonsTheme already exists in .gitignore"; else echo "JasonsTheme" >> .gitignore; fi
	cd JasonsTheme; \
	git pull --rebase --autostash; \
	npm i; \
	npm run build

copy-assets: mockup
	# styles
	cp ./JasonsTheme/dist/assets/main-*.css ./style.css

	# logos
	rm ./assets/logo-*.svg
	cp ./JasonsTheme/dist/assets/logo-*.svg ./assets/
	mv ./assets/logo-reverse-*.svg ./assets/logoreverse.svg
	mv ./assets/logo-*.svg ./assets/logo.svg
	mv ./assets/logoreverse.svg ./assets/logo-reverse.svg

	# hero-home
	cp ./JasonsTheme/dist/assets/hero-home-*.jpg ./assets/hero-home.jpg

change-logo-url:
	# https://stackoverflow.com/a/28592391/960623 
	sed -i "" -E 's|url\(/assets/logo-(.{8})\.svg|url\(/wp-content/themes/theme_ai_center/assets/logo.svg|g' style.css
	sed -i "" -E 's|url\(/assets/logo-reverse-(.{8})\.svg|url\(/wp-content/themes/theme_ai_center/assets/logo-reverse.svg|g' style.css
