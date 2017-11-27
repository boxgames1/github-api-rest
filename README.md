#API Documentation
####Base URL: https://github-api-rest.herokuapp.com/
####Prefix: /{Provider}/{version}/ - Example /github/v1/
####Method: GET
####Return: JSON with fields of the required entity

*/search/{id} : Generic search among all GitHub data. Returns every type of entity like a Repo, User, Issue or File.
*/repo/{id} : Receives the info of the selected repo.
*/user/{id} : Received the user info of the provided id.
