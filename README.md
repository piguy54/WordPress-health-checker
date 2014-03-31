WordPress-health-checker
========================

Simple PHP script that converts 301, 302 into 200's and everything else is a 500, good for AWS elastic load balancer health checks.

To install add this file to the root of your WordPress site, you may need to change permissions to an appropriate user, for example

chown apache:apache ./health-checker.php

Point your ELB health check at this.

If this script gets anything but a 301, 302 or 200 from the configured URL, it will throw a 500, otherwise it will return a nice clean and fresh 200 OK, which is great for health checking on AWS.
