<?php
$title = 'How to Turn On Your PC';
$steps = [
    'Make sure the power cable is plugged into the wall and the back of the computer.',
    'Check that the monitor is plugged in and turned on.',
    'Press the power button on the front or top of the PC case (often marked with a circle and line).',
    'Wait for the screen to show the login screen or desktop.',
    'If nothing happens, check that the power supply switch on the back of the PC is set to I (on).',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 40rem; margin: 2rem auto; padding: 0 1rem; line-height: 1.6; }
        h1 { color: #1a1a2e; }
        ol { padding-left: 1.25rem; }
        li { margin-bottom: 0.75rem; }
        .tip { background: #f0f4ff; border-left: 4px solid #3b5bdb; padding: 0.75rem 1rem; margin-top: 1.5rem; }
    </style>
</head>
<body>
    <h1><?= htmlspecialchars($title) ?></h1>
    <ol>
        <?php foreach ($steps as $step): ?>
            <li><?= htmlspecialchars($step) ?></li>
        <?php endforeach; ?>
    </ol>
    <p class="tip"><strong>Tip:</strong> On a laptop, press the power button once—do not hold it unless the device is frozen.</p>
</body>
</html>
