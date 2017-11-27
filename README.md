# API Documentation

#### Base URL: https://github-api-rest.herokuapp.com/

#### Prefix: /{Provider}/{version}/ - Example /github/v1/

#### Method: GET

#### Return: JSON with fields of the required entity

*   search/{type}/{query}/{page}/{perPage} :  
    Search among all objects of the type (repositories, users, issues, commits and code) by the query. Page and per page are optional parameters. First page and 25 per page are the default values.  
    Examples:  

    *   _search/repositories/q=topic:ruby&sort=update&order=asc/3/1_
    *   _search/code/q=addClass+in:file+language:js+user:jquery_
    *   _search/issues/q=windows+label:bug+language:python+state:open&sort=created&order=asc_
    *   _search/users/q=tom+repos:>42+followers:>1000_
    *   _search/commits/q=author:octocat_
*   repo/{owner}/{name} : Retrieves the data of a repo.
*   user/{username} : Retrieves user data by selected username.
