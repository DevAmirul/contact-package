<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-6">
            <div class="row mt-5">
                <h1 class="mb-4">Contact Form</h1>
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Your name</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                            placeholder="mr.xyz">

                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
                            placeholder="xyz@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Your message here......."></textarea>
                    </div>
                    <button class="btn btn-primary">Send message</button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>