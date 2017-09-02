
webservice: (method = POST)

url: localhost/myCar/qs3/qs3.php

Request json:
[{"name":"abc","age":"50"},{"name":"def","age":"20"},{"name":"ghi","age":"40"},{"name":"jkl","age":"35"},{"name":"mno","age":"15"}]


Response json:
{"sortedByAge":[{"name":"abc","age":50},{"name":"ghi","age":40},{"name":"jkl","age":35},{"name":"def","age":20},{"name":"mno","age":15}],"maxAge":50,"minAge":15,"averageAge":32}
