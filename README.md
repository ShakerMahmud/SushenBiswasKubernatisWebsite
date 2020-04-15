# To build, push and deploy the docker image to GKE using Cloud Build
```
gcloud builds submit --config cloudbuild.yaml
```

Step
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
Step
Go to your wp-config and add this line:
```
define('FS_METHOD', 'direct');
```



Step
give permission to one file:
```
whoami
```

```
chmod a+rwx <file>
```
