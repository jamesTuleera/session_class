<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrrap/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mt-5">
            Benz Images
        </h1>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <img id="benz_img" style="height: 200px; width: 400px;" src="images/c-30.png" alt="">

                <img id="benz_image" style="height: 200px; width: 400px;" src="images/c-300.png" alt="">

                <button id="c-300" class="m-2 btn btn-primary">c-300</button>
                <button id="s-class" class="m-2 btn btn-warning">s-class</button>
                <button id="gle" class="m-2 btn btn-success">gle</button>
                <button id="g-wagon" class="m-2 btn btn-danger">g-wagon</button>

                <h3 id="message">Choose your preferred car</h3>
            </div>
        </div>


        <h1 class="text-center mt-5">
            Users
        </h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <hr>
                

                <!-- <div class="">
                    <table class="table table-bordered">
                        <thead>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Country</th>
                            <th>Gender</th>
                        </thead>
                        <tbody id="users">
                            <tr>
                                <p class="text-center text-danger">
                                No users available <br>
                                <button class="btn btn-success btn-sm">Fetch users</button>
                            </p>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
                <div class="row" id="users">
                    <div class="col-12">
                        <p class="text-center text-danger">
                            No users available, Please click the button below to fetch users<br>
                            <button id="fetchBtn" onclick="getItems()" class="btn btn-success btn-sm mt-2">Fetch users</button>

                            
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php include('menu.php') ?>

    <script>

        function _id(getID) {
            return document.getElementById(getID)
        }

        function changeImage(e, imgSrc) {
            // _id(e).addEventListener('mouseover', function () {
                
                // _id('message').innerHTML = `Your preferred car is ${e} `
                return _id('benz_image').src = imgSrc
            // })

        }

        let imagesChange = [
            changeImage('c-300', 'images/c-300.png'),
            changeImage('s-class', 'images/s-class.png'),
            changeImage('gle', 'images/gle.png'),
            changeImage('g-wagon', 'images/g-wagon.png')
        ]

        // setInterval(()=>{
            for(i=0; i<imagesChange.length; i++){
                setInterval(()=>{
                    imagesChange[i]
                }, 1000)
            }



        let images = [
            'images/c-300.png',
           'images/s-class.png',
            'images/gle.png',
           'images/g-wagon.png',
        ]

        let currentImage = 0;
            setInterval(()=>{
                if(currentImage ==  images.length){
                    currentImage = 0;
                }
                _id('benz_img').src = images[currentImage]
                currentImage++
        }, 1000)


        let users = [
            {
                firstName: 'Florence',
                lastName: 'Lookman',
                age: 28,
                gender: 'Female',
                country: 'Uganda',
            },
            {
                firstName: 'Emmanuel',
                lastName: 'Obinna',
                age: 50,
                gender: 'Male',
                country: 'Nig',
            },

            {
                firstName: 'Florence',
                lastName: 'Lookman',
                age: 28,
                gender: 'Female',
                country: 'Uganda',
            },

            {
                firstName: 'Cynthia',
                lastName: 'Morgan',
                age: 38,
                gender: 'Female',
                country: 'Nig',
            },

            {
                firstName: 'Fela',
                lastName: 'Kuti',
                age: 50,
                gender: 'Male',
                country: 'Nig',
            },

            {
                firstName: 'Niniola ',
                lastName: 'Damilola',
                age: 90,
                gender: 'Female',
                country: 'Nig',
            },

            {
                firstName: 'Emma ',
                lastName: 'Chuks',
                age: 99,
                gender: 'Male',
                country: 'Nig',
            },

      
        ]

        let myUsers = ''


        for(i of users){
            //  console.log(i.firstName)
    myUsers += `
            <div class="col-md-5 shadow shadow-sm  p-3 m-2">
                                <div class="row d-flex align-items-center">
                                    <div class="col-3 pr-3 ">
                                        <img src="images/avatar.png" class="w-100" alt="">
                                    </div>
                                    <div class="col-6 pr-3">
                                        <h5>${i.firstName}  ${i.lastName}</h5>
                                        <p class="m-0">${i.age}</p>
                                        <p class="m-0">${i.country}</p>
                                        <p class="m-0">${i.gender}</p>

                                    </div>
                                </div>
                            </div>
            `
        }


        _id('fetchBtn').addEventListener('click',function(){
            _id('users').innerHTML = '<h1 class="text-center"> Loading... </h1>'
            setTimeout(function(){
                _id('users').innerHTML = myUsers
            }, 1000)
        })

        function getItems(){
            _id('users').innerHTML = myUsers
        }


    </script>

</body>

</html>
