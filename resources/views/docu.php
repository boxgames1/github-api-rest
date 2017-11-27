<html>
<head>
</head>
<body>
	<h1>API Documentation</h1>
	<h4>Base URL: https://github-api-rest.herokuapp.com/</h4>
	<h4>Prefix: /{Provider}/{version}/ - Example /github/v1/</h4>
	<h4>Method: GET</h4>
	<h4>Return: JSON with fields of the required entity</h4>
	<ul>
    <li>search/{type}/{query}/{page}/{perPage} : <br />
      Search among all objects of the type (repositories, users, issues, commits and code) by the query.
      Page and per page are optional parameters.
      First page and 25 per page are the default values.
      <br />Examples:<br />
        <ul>
          <li><i>search/repositories/q=topic:ruby&sort=update&order=asc/3/1</i></li>
          <li><i>search/code/q=addClass+in:file+language:js+user:jquery</i></li>
          <li><i>search/issues/q=windows+label:bug+language:python+state:open&sort=created&order=asc</i></li>
          <li><i>search/users/q=tom+repos:>42+followers:>1000</i></li>
          <li><i>search/commits/q=author:octocat</i></li>
        </ul>
    </li>
		<li>repo/{owner}/{name} : Retrieves the data of a repo.</li>
		<li>user/{username} : Retrieves user data by selected username.</li>
  </ul>
</body>
</html>
