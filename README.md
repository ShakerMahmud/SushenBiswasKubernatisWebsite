# Cloud Workflow For ME

Step - 1
Go to deployment.yml line 22 and
Enter Your Project ID- In my Case "sushenbiswas" .
```
image: gcr.io/sushenbiswas/wordpress-image
```
Step - 2
Go to Cloud Build Trigger
Select Build configuration
```
/cloudbuild.yaml
```
Step - 3
Delete Previous configmap in the Kubernatis Cluster if there have any.
if this is you first build you dont need to do that .
But it is secound or more time ther you need to delet the config map
in My case its name is: wordpressconfig

Step - 4
Write Cloud SQL info to the
Cloud Build Veriable Section

Step - 5
Go to vm instencess
Copy 3 VM IP and
Go to SQL Connection
and add this 3 ip to public ip


Explore the IP the Service and ingress Sections


Step-6
Go to your cluster and connect cloud shell:

```
kubectl get pods
```

```
kubectl exec -it <podname> bash
```

```
chmod -R a+rw wp-content
```
Step -7
Go to your wp-config and add this line:
```
define('FS_METHOD', 'direct');
```



Step -8
give permission to one file:
```
whoami
```

```
chmod a+rwx <file>
```
