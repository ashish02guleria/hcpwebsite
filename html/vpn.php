<?php include 'includes/header.php'; ?>

<section id="vpn" class="p-6 bg-gray-50 rounded-xl shadow-md">
  <h2 class="text-2xl font-bold mb-4">VPN</h2>

  <!-- VPN Access Information -->
  <div class="mb-6">
    <p class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded">
      To get VPN access, please email the 
      <a href="mailto:hpc.helpdesk@ashoka.edu.in" class="text-blue-600 underline">
        HPC Helpdesk
      </a>.
      <br>
      <strong>Note for students:</strong> Approval from your Faculty or HOD is required before access can be granted.
    </p>
  </div>

  <!-- VPN Download -->
  <div class="mb-6">
    <h3 class="text-lg font-semibold">Download the VPN Client</h3>
    <p>
      You can download the VPN client from the following link:
      <a href="https://drive.google.com/drive/u/0/folders/1pPJLZvTcef_Mkao0vIuNO2NZAJws3d1-"
         class="text-blue-600 underline" target="_blank" rel="noopener noreferrer">
         VPN Download
      </a>.
    </p>
  </div>

  <!-- VPN Configuration -->
  <div class="mb-6">
    <h3 class="text-lg font-semibold">VPN Configuration Instructions</h3>
    <ol class="list-decimal list-inside">
      <li>Download and install the VPN client from the link above.</li>
      <li>Open the VPN application and go to <strong>Remote Access</strong> settings.</li>
      <li>Configure the VPN profile using one of the following options:</li>
      <ul class="list-disc list-inside ml-6">
        <li>
          <strong>Airtel-Ashoka</strong><br>
          Remote Gateway: <code>125.22.40.140</code><br>
          Port Number: <code>8443</code>
        </li>
        <li>
          <strong>Powergrid-Ashoka</strong><br>
          Remote Gateway: <code>103.7.128.210</code><br>
          Port Number: <code>8443</code>
        </li>
      </ul>
      <li>Enter your VPN login credentials when prompted.</li>
      <li>Click <strong>Connect</strong> to establish the VPN connection.</li>
    </ol>
  </div>

  <!-- Common VPN Issues -->
  <div class="mb-6">
    <h3 class="text-lg font-semibold">Troubleshooting VPN Issues</h3>
    <ul class="list-disc list-inside">
      <li>Ensure your internet connection is active.</li>
      <li>Double-check your username and password.</li>
      <li>Restart the VPN client and try again.</li>
      <li>If the issue persists, contact HPC support at
          <a href="mailto:hpc.helpdesk@ashoka.edu.in" class="text-blue-600 underline">
          hpc.helpdesk@ashoka.edu.in</a>.
      </li>
    </ul>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
