#include <stdio.h>
int main(){
	//INPUT
	int n;
	printf("Enter number of elements:\n");
	scanf("%d",&n);
	int arr[n];
	for (int i=0;i<n;i++){
		printf("Enter number no.%d:\n",i+1);
		scanf("%d",&arr[i]);
	}
	//COMPUTE
	int min;
	for (int i=0,count=0;i<n;i++){
		if (arr[i]>0) {
			min=arr[i];
			count++;
			if (arr[i+1]<arr[i]) {
				min=arr[i+1];
				i++;
			}
			}
		}
	printf("Min number is:%d",min);
		
	}

