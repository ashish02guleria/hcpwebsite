<?php include 'includes/header.php'; ?>
<section class="card">
  <h2>Cluster Information</h2>

  <h3>Node Types</h3>
  <ul>
    <li><strong>Login/Master Node:</strong> Entry point to the cluster. Used for job submission and file management. Avoid running compute-intensive tasks here.</li>
    <li><strong>Compute Nodes:</strong> Dedicated for CPU-based workloads. Jobs are scheduled via the resource manager.</li>
    <li><strong>GPU Nodes:</strong> Optimized for GPU-accelerated tasks. Requires explicit GPU resource requests in job scripts.</li>
  </ul>

  <h3>Technical Configuration</h3>
  <pre>
Master Node:
  - CPU: 1 x Xeon Gold (20 cores)
  - RAM: 47GB

Compute Nodes (7x):
  - CPU: 2 x Intel Xeon Gold 6230R @ 2.10GHz (52 cores total)
  - vCPU: 104
  - RAM: 128GB each

GPU Nodes (2x):
  - GPU: NVIDIA Tesla V100-PCIE-32GB (5120 CUDA cores)
  - CPU: 2 x Intel Xeon Gold 6230R @ 2.10GHz
  - RAM: 128GB each
  </pre>

  <h3>Policies</h3>
  <ul>
    <li>Do not share your login credentials with anyone.</li>
    <li>You are responsible for protecting and backing up data stored in $HOME and $Storage; HPC administration is not liable for data loss.</li>
    <li>Do not store data on the cluster for more than one week unless it is for an active simulation; re-upload data when needed in the future.</li>
    <li>Do not run jobs on the master node; violations may result in job cancellation and repeated offenses may lead to account closure.</li>
    <li>User accounts and data will be permanently deleted one month after account expiration.</li>
  </ul>
</section>
<?php include 'includes/footer.php'; ?>
