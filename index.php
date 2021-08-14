<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center mt-5 text-success">
                    Registration-Form
                </h3>
                <form>
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                    </div>

                    <div class="mb-3">
                        <label for="Number" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="number" placeholder="Enter Your Mobile Number">
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="" id="" class="form-control" placeholder="Please Enter Date">
                    </div>

                    <div class="mb-3">                                                                      
                        <label for="country" class="form-label">Country</label> 
                        <select type="text" name="country" id="country" class="form-control" onchange="myfun(this.value)">
                            <option >Please Select Any One</option>
                            <option>India</option>
                            <option >Pakistan</option>
                            <option >China</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <select type="text" name="state" id="state" class="form-control" onchange="stateFun(this.value)">
                            <option >Please Select Any One</option>
                        </select>   
                    </div>

                    <div class="mb-3">
                          <label for="city" class="form-label">City</label>
                          <select type="text" name="city" id="city" class="form-control">
                            <option >Please Select Any One</option>
                           </select>
                    </div>
 
                    <div class="mb-3 text-center ">
                         <button  class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script type="text/javascript">
    function myfun(data){
        alert(data);
        var req = new XMLHttpRequest();
        req.open("GET","http://localhost/nishank/get_all_country.php?datavalue="+data,true);
        req.send();

       req.onreadystatechange=function(){

           if(req.readyState == 4 && req.status == 200){
               document.getElementById('state').innerHTML = req.responseText;
           }
       };
    }

    function stateFun(data){
        alert(data);
        var req = new XMLHttpRequest();
        req.open("GET","http://localhost/nishank/get_all_country.php?datavalue="+data,true);
        req.send();

       req.onreadystatechange=function(){

           if(req.readyState == 4 && req.status == 200){
               document.getElementById('city').innerHTML = req.responseText;
           }
       };
    }


    </script>
</body>

</html>