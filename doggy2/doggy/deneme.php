<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="doggy.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
    <body>
        <div class="container">
            <h1 class="text-center mt-3 mb-3"><%= title %></h1>
            
            <% if(action == 'add') { %>

            <% } else { %>
                
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">Sample Data</div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                            <%
                            if(sampleData.length > 0)
                            {
                                sampleData.forEach(function(data){
                            %>
                            <tr>
                                <td><%= data.first_name %></td>
                                <td><%= data.last_name %></td>
                                <td><%= data.age %></td>
                                <td><%= data.gender %></td>
                                <td></td>
                            </tr>
                            <%
                                });
                            }
                            else
                            {
                            %>
                            <tr>
                                <td colspan="5">No Data Found</td>
                            </tr>
                            <%
                            }
                            %>
                        </table>
                    </div>
                </div>
            </div>

            <% } %>

        </div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>