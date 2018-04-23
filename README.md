# missile-defense
Repo for Missile Defense Project

## Workflow
**Key Branches:** Master & Staging
- Create `new branch` off `staging`, prefix with `feature` or `bug`
- Commit changes to `new branch` and publish the branch
- Submit PR from `new branch` to `staging`
- Upload `staging` to staging server
- After evaluation and testing, submit PR from `staging` to `master`
- Upload `master` to production server

## Updating SASS
1. Navigate to the theme directory `cd /wp-content/themes/missile-defense`
2. Run `compass watch` to watch for changes in .sass files and compile them to .css files
