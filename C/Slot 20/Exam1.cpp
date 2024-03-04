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
	//Find the first positive number
	int min,count=0,i=0;
	for (i;i<n;i++){
		if (arr[i]>0){
			min=arr[i];
			count=1;
			break;}}
	if (count==0){
	printf("There is no positive number");}
	else {
		for (i+1;(i+1)<n;i++){
			if (arr[i+1]<min && arr[i+1]>0){
				min=arr[i+1];
			}
		}
		printf("Min number is %d",min);
	}
}
	

