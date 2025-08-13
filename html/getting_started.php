<?php include 'includes/header.php'; ?>
<section class="card">
  <h2>Getting Started</h2>

  <h3>Step 1: Requesting an HPC Account</h3>
  <ol>
    <li>
      <strong>Download and complete the user creation form:</strong><br>
      <a href="/User%20creation%20Form_HPC.docx" download>Download User Creation Form</a>
    </li>
    <li>
      <strong>Email the completed form to:</strong> <code>hpc.helpdesk@ashoka.edu.in</code><br>
      Include your affiliation and project details.
    </li>
    <li>
      <strong>Get approval based on your cluster:</strong>
      <ul>
        <li><strong>CS/Bio Cluster:</strong> Approval from HOD or Faculty of your department</li>
        <li><strong>Chemistry Cluster:</strong> Approval from <em>Prof. Sourav Pal</em></li>
        <li><strong>Physics Cluster:</strong> Approval from <em>Prof. Garima Mishra</em></li>
      </ul>
    </li>
    <li>
      <strong>Wait for confirmation:</strong> You will receive your HPC login credentials via email once your account is created.
    </li>
  </ol>

  <h3>Step 2: SSH Access</h3>
  <p>After receiving your credentials, connect to the HPC login node using SSH:</p>
  <pre><code>ssh your-username@hpcServerIP</code></pre>
  <p>Replace <code>your-username</code> with the username provided to you.</p>
  <p><em>If you want to access HPC from outside campus, you need VPN. For VPN access, visit 
    <a href="http://10.2.95.149/vpn.php" target="_blank">this page</a>.
  </em></p>

  <h3>Step 3: Load Environment Modules</h3>
  <p>Use the following commands to view and load available software modules:</p>
  <pre><code>
module avail
module load &lt;module-name&gt;
  </code></pre>
  <p>For a full list of available software, visit the <a href="software.php">Software Available</a> page.</p>
</section>
<?php include 'includes/footer.php'; ?>
