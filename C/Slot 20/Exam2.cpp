#include <stdio.h>

float crystalTienDien(int soKWh);
float crystalTienDien(int soKWh){
	float ele_amt;
	if (soKWh <= 50){
		ele_amt = soKWh*500;
		printf("Total amount of electricity to be paid is: %f VND\n",ele_amt);
	}
	else if (soKWh > 50 && soKWh <=100){
		ele_amt = 50*500 + (soKWh-50)*700;
		printf("Total amount of electricity to be paid is: %f VND\n",ele_amt);
	}
	else if (soKWh >100){
		ele_amt = 50*500 + 50*700 + (soKWh-100)*900;
		printf("Total amount of electricity to be paid is: %f VND\n",ele_amt);
	}
	else {
		printf("Please input a valid number\n");
	}
}
int main(){
	int function;
	do{
	printf("Please choose one of the following functions:\n");
	printf("1. Input the amount of electricity has been used and check the amount electricity bill\n");
	printf("2. Check the amount electricity bill for 30 kWh\n");
	printf("3. Check the amount electricity bill for 80 kWh\n");
	printf("4. Check the amount electricity bill for 120 kWh\n");
	printf("5. Exit\n");
	scanf("%d",&function);
	switch (function){
		case 1:
			printf("Please input the number of KWh has been used:\n");
			int a;
			scanf("%d",&a);
			crystalTienDien(a);
			break;
		case 2:
			crystalTienDien(30);
			break;
		case 3:
			crystalTienDien(80);
			break;
		case 4:
			crystalTienDien(120);
			break;
		}	
	} while (function!=5);
}
