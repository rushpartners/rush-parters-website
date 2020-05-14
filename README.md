# How does it work?
The website is served using github pages from the gh-pages branch. Wercker takes care of the production build process and merges to this branch.

# How to get started with development.

Install dependencies:
```
yarn
(Use Yarn instead if you wish)
```

```
npm install
```

```
composer install
```

```
yarn dev
(Use Yarn instead if you wish)
```
or
```
npm run dev
```

To run with built in server and watch files for changes

``` 
yarn watch
```
or
```
npm run watch
```

For production build:
``` 
yarn watch:prod
```
or
```
npm run watch:prod
```

# Release to production

Merge branch to master. The gh actions build process should now run `npm install` and then `npm run production`.
After successful build it will trigger the deploy step in gh actions, this will then deploy the build to gh-pages branch.
