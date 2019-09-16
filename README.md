# How does it work?
The website is served using github pages from the gh-pages branch. Wercker takes care of the production build process and merges to this branch.

# How to get started with development.
(Use Yarn instead if you wish)

```
npm install
npm run dev
```

To run with built in server and watch files for changes

```
npm install
npm run watch
```


# Release to production

Merge branch to master. The wercker build process should now run `npm run production` and merge to gh-pages branch.
