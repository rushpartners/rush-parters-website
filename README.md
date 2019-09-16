# How does it work?
The website is served using github pages from the gh-pages branch. Wercker takes care of the production build process and merges to this branch.

# How to get started with development.

```
yarn
yarn dev
```

To run with built in server and watch files for changes

```
yarn 
yarn watch
```


# Release to production

Merge branch to master. The wercker build process should now run `npm run production`. After successful build you need to trigger the deploy step mamnually in Wercker, this will then merge the build to gh-pages branch.
