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
    <li>/{query} : <br />
      Executes the query
      The first page and '25' per page are the default values if not specified others in the query.
      <br />Examples:<br />
        <ul>
          <li>Search repos: <i>search/repositories?q=topic:ruby&sort=update&order=asc&page=2</i></li>
          <li><i>search/code?q=addClass+in:file+language:js+user:jquery</i></li>
          <li><i>search/issues?q=windows+label:bug+language:python+state:open&sort=created&order=asc</i></li>
          <li><i>search/users?q=tom+repos:>42+followers:>1000</i></li>
          <li><i>search/commits?q=author:octocat</i></li>

          <li>Get a commit: <i>view/repos/boxgames1/github-api-rest/commits/b721b2e7e4fe9b7723f1fbf97c044354991a93f5</i></li>
          <li>Get repos from a user: <i>view/users/boxgames1/repos</i></li>
          <li>Get info from a user: <i>users/boxgames1</i></li>
          <li>Get an issue: <i>repos/webpack-contrib/extract-text-webpack-plugin/issues/667</i></li>
        </ul>
		</li>
  </ul>
</body>
</html>
