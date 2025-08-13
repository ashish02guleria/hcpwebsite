<?php include 'includes/header.php'; ?>
<section class="card">
  <h2>Basic Linux for HPC Users</h2>

  <h3>1. Introduction to Linux</h3>
  <p>Linux is the backbone of most HPC systems due to its stability, scalability, and open-source nature.</p>
  <ul>
    <li><strong>What is Linux?</strong> A Unix-like operating system that powers servers, clusters, and supercomputers.</li>
    <li><strong>Why Linux for HPC?</strong>
      <ul>
        <li>Efficient resource management</li>
        <li>Strong support for parallel computing</li>
        <li>Customizable environments</li>
      </ul>
    </li>
    <li><strong>Common HPC Distributions:</strong> CentOS / Rocky Linux, Ubuntu Server, SUSE Linux Enterprise Server</li>
  </ul>

  <h3>2. Command Line Basics</h3>
  <pre>
pwd          # Print working directory
ls           # List files
cd           # Change directory
touch        # Create file
mkdir        # Create folder
cp           # Copy file/folder
mv           # Move/rename
rm           # Remove
  </pre>
  <p><em>Example:</em></p>
  <pre>
cd ~/projects
ls -l
cp data.txt backup/data.txt
  </pre>

  <h3>3. Understanding File Permissions</h3>
  <p>View permissions with <code>ls -l</code> and change with <code>chmod</code> or <code>chown</code>.</p>
  <ul>
    <li><code>chmod 755 script.sh</code> – make script executable</li>
    <li><code>chown user:group file.txt</code> – change ownership</li>
  </ul>
  <p>Permission breakdown: r = read, w = write, x = execute</p>

  <h3>4. Working with Files and Directories</h3>
  <pre>
tar -cvf archive.tar folder/     # Archive folder
gzip file.txt                    # Compress file
find . -name "*.log"             # Find files
grep "error" logfile.txt         # Search in files
awk '{print $1}' data.txt        # Extract column
sed 's/foo/bar/g' file.txt       # Replace text
  </pre>

  <h3>5. Shell Scripting Basics</h3>
  <p>Automate tasks with scripts:</p>
  <pre>
#!/bin/bash
echo "Starting job..."
module load gcc
./run_simulation.sh
  </pre>
  <p>Loops:</p>
  <pre>
for i in {1..5}; do
  echo "Run $i"
done
  </pre>
  <p>Conditionals:</p>
  <pre>
if [ -f results.txt ]; then
  echo "Results found"
fi
  </pre>

  <h3>6. Process and Resource Management</h3>
  <pre>
top / htop       # View running processes
ps aux           # List processes
kill PID         # Kill process
free -h          # Memory usage
df -h            # Disk usage
du -sh folder/   # Folder size
  </pre>

  <h3>7. Software Modules & Environment Setup</h3>
  <pre>
module avail
module load python/3.10
module unload gcc
export PATH=$PATH:/home/user/bin
export LD_LIBRARY_PATH=/opt/lib:$LD_LIBRARY_PATH
  </pre>

  <h3>8. HPC-Specific Tools & Practices (PBS)</h3>
  <p>PBS (Portable Batch System) is used on our cluster to manage compute jobs.</p>
  <p>Common PBS commands:</p>
  <pre>
qsub job.sh         # Submit job
qstat               # Check job status
qstat -u username   # View your jobs
qdel JOBID          # Cancel a job
pbsnodes -a         # Show node information
  </pre>
  <p>Sample PBS job script:</p>
  <pre>
#!/bin/bash
#PBS -N test_job           # Job name
#PBS -l nodes=1:ppn=4      # 1 node, 4 processors
#PBS -l walltime=01:00:00  # Time limit
#PBS -o output.log         # Standard output file
#PBS -e error.log          # Standard error file
#PBS -q batch              # Queue name

cd $PBS_O_WORKDIR
module load mpi
mpirun -np 4 ./my_program
  </pre>
  <p>Tips:</p>
  <ul>
    <li>Always request only the resources you need to avoid long queue times.</li>
    <li>Check available queues with <code>qstat -Q</code>.</li>
    <li>Use <code>$PBS_O_WORKDIR</code> to run jobs from your submission directory.</li>
  </ul>

  <h3>9. Remote Access & File Transfer</h3>
  <pre>
ssh user@hpc.cluster.edu                   # Remote login
scp file.txt user@remote:/path/             # Copy file
rsync -avz data/ user@remote:/data/         # Sync
ssh-keygen                                  # Generate SSH key
ssh-copy-id user@remote                     # Enable key login
  </pre>

  <h3>10. Best Practices & Troubleshooting</h3>
  <ul>
    <li>Keep environment clean – use virtual environments.</li>
    <li>Check logs (<code>stderr</code>, <code>stdout</code>) for job issues.</li>
    <li>Use <code>man</code>, <code>--help</code>, and documentation.</li>
    <li>When asking for help, include error messages, job scripts, and system info.</li>
  </ul>
</section>
