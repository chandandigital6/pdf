<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive PDF Viewer</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* For larger screens, use a fixed height */
        @media (min-width: 768px) {
            .embed-responsive {
                height: 600px;
            }
        }

        /* For mobile devices, take up full height */
        @media (max-width: 767px) {
            .embed-responsive {
                height: 100vh; /* Full screen height */
            }
        }
    </style>
</head>
<body>

<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="embed-responsive embed-responsive-16by9" style="height: 100vh;">
                        <iframe src="{{ asset('storage/' . $pdf->image_pdf) }}"
                                class="embed-responsive-item"
                                style="width:100%; height:100vh; border:none;"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
