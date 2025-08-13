<?php include 'includes/header.php'; ?>
<section class="card">
  <h2>Job Scheduling (PBS)</h2>

  <h3>Submit a Job</h3>
  <pre># Example PBS job script
#!/bin/bash
#PBS -N my_job_name         # Job name
#PBS -o output.log          # Standard output file
#PBS -e error.log           # Standard error file
#PBS -l nodes=1:ppn=70      # Request 1 node with 70 processor cores
#PBS -q cpu                 # Submit to the 'cpu' queue

cd $PBS_O_WORKDIR           # Change to the directory from which the job was submitted
module load gcc/11.2.0      # Load required module
./my_program                # Run your executable</pre>

  <p><strong>Note:</strong> If your job requires GPU resources, change the queue from <code>cpu</code> to <code>gpu</code> using <code>#PBS -q gpu</code>.</p>

  <h3>Directive Descriptions</h3>
  <ul>
    <li><code>#PBS -N</code>: Sets the name of the job for easier identification.</li>
    <li><code>#PBS -o</code>: Specifies the file to which standard output will be written.</li>
    <li><code>#PBS -e</code>: Specifies the file to which standard error will be written.</li>
    <li><code>#PBS -l nodes=1:ppn=70</code>: Requests 1 node with 70 processor cores (ppn = processors per node).</li>
    <li><code>#PBS -q</code>: Specifies the queue to submit the job to (e.g., <code>cpu</code> or <code>gpu</code>).</li>
    <li><code>$PBS_O_WORKDIR</code>: Environment variable pointing to the directory where the job was submitted.</li>
  </ul>

  <h3>Common Commands</h3>
  <ul>
    <li><code>qstat</code> - View job status</li>
    <li><code>qdel &lt;jobid&gt;</code> - Cancel a job</li>
    <li><code>qsub job_script.sh</code> - Submit a job script</li>
  </ul>
</section>
<?php include 'includes/footer.php'; ?>
