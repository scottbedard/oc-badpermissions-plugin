# Bad Permissions
This plugin demonstrates how a ceratin permissions setups can accidentally block access to the entire backend.
https://github.com/octobercms/october/issues/1180

It appears that the backend is selecting the blocked page as the default, and therefor making the rest of the backend inaccessible. Even if I try to navigate to a different controller manually via typing "/categories" into the URL, I am immediately redirected back to the page I don't have access to.

#### Setup
1. Install the plugin
2. Create an administrator who has blocked access to "Posts", but does have access to "Categories".
3. Log in with the new administrator
