/**
 * @typedef {import('@roots/bud').Bud} bud
 *
 * @param {bud} app
 */
module.exports = async (app) => {
  app
    /**
     * Application entrypoints
     *
     * Paths are relative to your resources directory
     */
    .entry({
      app: ['@scripts/app', '@styles/app'],
      editor: ['@scripts/editor', '@styles/editor'],
    })

    /**
     * @see https://github.com/roots/bud/issues/1233
     * The following specifies that $ is the default jQuery export:
     * Now, in any module in our application, we can invoke jQuery with $. There is no need to import it.
     */
     .provide({
      jquery: '$',
    })

    /**
     * These files should be processed as part of the build
     * even if they are not explicitly imported in application assets.
     */
    .assets('images')

    /**
     * These files will trigger a full page reload
     * when modified.
     */
    .watch('resources/views/**/*', 'app/**/*')

    /**
     * Target URL to be proxied by the dev server.
     *
     * This should be the URL you use to visit your local development server.
     */
     .proxy(process.env.PROXY_URL || 'http://umrohpass.test')

    /**
     * Development URL to be used in the browser.
     */
    .serve('http://0.0.0.0:3000');
};
