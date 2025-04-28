<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Frequent Word</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Find the Most Frequent Word</h2>

        <form method="POST">
            <div class="form-group">
                <label for="text">Enter your text:</label>
                <textarea name="text" class="form-control" rows="5" placeholder="Enter your paragraph here..."></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Count Most Frequent Word</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $text = strtolower($_POST['text']);
            $text = preg_replace('/[^a-z\s]/', '', $text);
            $words = explode(' ', $text);
            $wordCount = array_count_values($words);
            $maxCount = max($wordCount);
            $mostFrequentWord = array_search($maxCount, $wordCount);

            echo "<div class='alert alert-info mt-4'>
                    <h5>Most Frequent Word:</h5>
                    <p><strong>Word:</strong> $mostFrequentWord</p>
                    <p><strong>Count:</strong> $maxCount</p>
                  </div>";
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
