<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional Style -->
    <style>
        .card-header-font {
            font-family:Helvetica Neue, Helvetica, Arial, sans-serif;
            font-weight:100;
        }
        .bg-gradient {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(28,88,119,1) 0%, rgba(0,212,255,1) 100%);
        }
    </style>
    <title>Job offer</title>
</head>
<body class="bg-gradient">
<div class="container mt-5 col-md-4">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h2 class="card-header-font">Job offer</h2>
                <small>If you want to join our team, please send your CV.</small>
                <hr>
            </div>
            <div>
                <form action="{{ route('submit_cv') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="input_name">Your Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input name="input_name" type="text" class="form-control" id="input_name" aria-describedby="input_name_help" placeholder="example: John Doe" autofocus required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="input_email">Your Email Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input name="input_email" type="email" class="form-control" id="input_name" aria-describedby="input_email_help" placeholder="example: john.doe@mail.com" required>
                        </div>
                        <small id="input_emil_help" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="input_message">Your Message <span class="font-italic text-muted">(optional)</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-comment"></i>
                                </div>
                            </div>
                            <textarea name="input_message" class="form-control" id="input_message" placeholder="example: I'd like to say that ..." rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="input_cv">Your CV</label>
                        <input name="input_cv" id="input_cv" aria-describedby="input_cv_help" type="file" class="form-control-file" accept="application/pdf" required>
                        <small id="input_cv_help" class="form-text text-muted">Please upload PDF format of your CV.</small>
                    </div>

                    <button type="submit" class="btn btn-primary col-12">Submit your CV</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</body>
</html>
