# ai.epfl.ch's Wordpress theme

This is the repository for ai.epfl.ch's Wordpress theme. It uses the new
Wordpress [Block themes] mecanisms.

The mockups are provided by [@jsnrynlds] in the [epfl-ai-center-ui]
private repository. A fork accessible by epfl-si is available
[here](https://github.com/epfl-si/epfl-ai-center-ui).

## Workflow

Once this reporitory is cloned, one can use the [Makefile]:

- `make all` will clone [@jsnrynlds]'s repository in the JasonTheme's
  subfolder and update it if needed. This command will also build the theme.
- `make copy-assets` will retrieve some assets, such as logos or cascading
  styles sheets, and add them to the theme's assets folder.
- `make change-logo-url` will use [sed] to upate the URLs present in the
  [style.css]; the one generated by [vite] includes an hash in them
  (see [#378]).

[Block themes]: https://wordpress.org/documentation/article/block-themes/
[@jsnrynlds]: https://github.com/jsnrynlds
[epfl-ai-center-ui]: https://github.com/jsnrynlds/epfl-ai-center-ui
[Makefile]: ./Makefile
[sed]: https://www.gnu.org/software/sed/manual/sed.html
[style.css]: ./style.css
[#378]: https://github.com/vitejs/vite/issues/378

### GH Action

The is a GH action that is triggered with the push of a tag. The action creates a zip only with folders/files needed for the WordPress theme and also creates a release with the zip attached to it. So after the action is executed you just have to donwload the zip in the release section and upload it into WordPress.
