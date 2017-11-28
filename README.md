# API Documentation

#### Base URL: https://github-api-rest.herokuapp.com/

#### Prefix: /{Provider}/{version}/ - Example /github/v1/

#### Method: GET

#### Return: JSON with fields of the required entity

*   /{query} :  
    Executes the query The first page and '25' per page are the default values if not specified others in the query.  
    Examples:  

    *   Search repos: _search/repositories?q=topic:ruby&sort=update&order=asc&page=2_
    *   _search/code?q=addClass+in:file+language:js+user:jquery_
    *   _search/issues?q=windows+label:bug+language:python+state:open&sort=created&order=asc_
    *   _search/users?q=tom+repos:>42+followers:>1000_
    *   _search/commits?q=author:octocat_
    *   Get a commit: _view/repos/boxgames1/github-api-rest/commits/b721b2e7e4fe9b7723f1fbf97c044354991a93f5_
    *   Get repos from a user: _view/users/boxgames1/repos_
    *   Get info from a user: _users/boxgames1_
    *   Get an issue: _repos/webpack-contrib/extract-text-webpack-plugin/issues/667_
