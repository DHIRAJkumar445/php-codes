<?php
<?php
$default = "welcome to BCA class";
$string = $_SERVER['REQUEST_METHOD'] === 'POST' ? (string)($_POST['text'] ?? '') : $default;
$string = (string)$string;

$count = preg_match_all('/[aeiou]/i', $string, $matches);

$parts = preg_split('/([aeiou])/i', $string, -1, PREG_SPLIT_DELIM_CAPTURE);
$highlighted = '';
foreach ($parts as $p) {
    if (preg_match('/^[aeiou]$/i', $p)) {
        $highlighted .= '<span class="vowel">' . htmlspecialchars($p, ENT_QUOTES, 'UTF-8') . '</span>';
    } else {
        $highlighted .= htmlspecialchars($p, ENT_QUOTES, 'UTF-8');
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vowel Counter</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(120deg,#f6f9fc,#eef6ff); min-height:100vh; }
        .card { border-radius: 12px; }
        .vowel { color:#fff; background:#ff6b6b; padding:2px 6px; border-radius:6px; font-weight:600; }
        .result { font-family: "Segoe UI", Roboto, Arial, sans-serif; }
        .muted-small { color:#6c757d; font-size:.9rem; }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-3">Vowel Counter</h4>
                    <form method="post" class="mb-3" action="">
                        <div class="mb-3">
                            <label for="text" class="form-label">Enter text</label>
                            <input id="text" name="text" class="form-control" value="<?php echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8'); ?>" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Count Vowels</button>
                            <a href="vowels.php" class="btn btn-outline-secondary ms-2">Reset</a>
                        </div>
                    </form>

                    <div class="result">
                        <div class="mb-2"><strong>Original:</strong> <?php echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8'); ?></div>
                        <div class="mb-2"><strong>Highlighted:</strong> <?php echo $highlighted ?: '<em class="text-muted">— no text —</em>'; ?></div>
                        <div class="mt-3"><span class="badge bg-info text-dark">Number of vowels: <?php echo (int)$count; ?></span></div>
                    </div>
                </div>
            </div>

            <footer class="text-center muted-small">
                Tip: type or paste text and press "Count Vowels".
            </footer>
        </div>
    </div>
</div>
</body>
</html>