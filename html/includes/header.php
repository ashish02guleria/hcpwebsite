<?php
$active = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>HPC Cluster Documentation</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
<header class="site-header">
  <div class="container header-flex">
    <h1 class="brand">
      <a href="/index.php"><i class="fas fa-server"></i> HPC Cluster</a>
    </h1>

    <!-- Responsive Nav Toggle -->
    <button class="nav-toggle" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <nav class="main-nav">
      <ul>
        <li><a href="/index.php" class="<?= $active=='index.php' ? 'active' : '' ?>">Home</a></li>
        <li><a href="/about.php" class="<?= $active=='about.php' ? 'active' : '' ?>">About HPC</a></li>
        <li><a href="/cluster.php" class="<?= $active=='cluster.php' ? 'active' : '' ?>">Cluster Info</a></li>
        <li><a href="/getting_started.php" class="<?= $active=='getting_started.php' ? 'active' : '' ?>">Getting Started</a></li>
        <li><a href="/jobs.php" class="<?= $active=='jobs.php' ? 'active' : '' ?>">Job Scheduling</a></li>
        <li><a href="/software.php" class="<?= $active=='software.php' ? 'active' : '' ?>">Software</a></li>
        <li><a href="/linux_basics.php" class="<?= $active=='linux_basics.php' ? 'active' : '' ?>">Linux Basics</a></li>
        <li><a href="/vpn.php" class="<?= $active=='vpn.php' ? 'active' : '' ?>">VPN</a></li>
      </ul>
    </nav>
  </div>
</header>
<main class="container">
