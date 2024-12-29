<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diploma Admission Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="diploma.css ">
</head>

<body>
    <div class="container mt-5">
        <div class="form-container">
            <div class="form-header">
                <h2>Diploma Admission Form</h2>
                <p>Please fill out the details below to apply for the Diploma course.</p>
            </div>
            <form action="/submit_diploma_admission" method="POST">
                <div class="form-group">
                    <label for="name">Student Name</label>
                    <input type="text" id="name" class="form-control" name="name" required>
                </div>

                <div class="form-group">
                    <label for="marks10">10th Grade Marks</label>
                    <input type="number" id="marks10" class="form-control" name="marks10" required min="0" max="100">
                </div>

                <div class="form-group">
                    <label for="qualification">Previous Course/Qualification</label>
                    <input type="text" id="qualification" class="form-control" name="qualification" required>
                </div>

                <div class="form-group">
                    <label for="exam-result">Entrance Exam Result</label>
                    <input type="text" id="exam-result" class="form-control" name="exam_result">
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{10}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" class="form-control" name="address" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-custom btn-block">Submit Application</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>