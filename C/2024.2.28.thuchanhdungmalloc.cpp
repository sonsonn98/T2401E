#include <stdio.h>
#include <malloc.h>
#include <string.h>
int main(){
	struct ds_sinhvien{
		char ten[50];
		int tuoi;
		
	};
//	typedef ds_sinh vien DSsinhvien;
	int n;
	printf("Nhap vao so sinh vien:");
	scanf("%d",&n);
	struct ds_sinhvien DS[n];
	for (int i=0;i<n;i++){
		printf("Nhap ten sinh vien %d:\n",i+1);
		getchar();
		gets(DS[i].ten);
		printf("Nhap tuoi sinh vien %d:\n",i+1);
		scanf("%d",&DS[i].tuoi);}
	printf("Chon mot chuc nang:\n1. Sinh vien co tuoi lon nhat\n2. Sinh vien co ten dai nhat\n3. Danh sach sinh vien lon hon 20 tuoi\n4. Tim kiem thong tin sinh vien theo tuoi\n");
	int chucnang;
	scanf("%d",&chucnang);
	switch(chucnang){
		case 1:	{	
			char tensv_tuoimax[50];
			strcpy (tensv_tuoimax,DS[0].ten);
			int tuoi_max=DS[0].tuoi;
			for (int i=1; i<n;i++){
				if (DS[i].tuoi > tuoi_max){
					tuoi_max=DS[i].tuoi;
					strcpy (tensv_tuoimax,DS[i].ten);
				}
			}
			printf("Sinh vien co tuoi lon nhat la: %s",tensv_tuoimax);
			break;}
		case 2:{
			char tensv_dainhat[50];
			strcpy (tensv_dainhat,DS[0].ten);
			for (int i=1; i<n;i++){
				if (strlen(DS[0].ten) > strlen(tensv_dainhat)){
					strcpy (tensv_dainhat,DS[0].ten);
				}
			}
			printf("Sinh vien co ten dai nhat la: %s",tensv_dainhat);
			break;}
		case 3:{
			for (int i=0,stt=1; i<n; i++){
				if (DS[i].tuoi > 20){
					printf("%d. %s - Tuoi: %d\n",stt,DS[i].ten,DS[i].tuoi);
					stt++;
				}
			}
			break;
		}
		case 4:{
			int tuoi;
			printf("Nhap so tuoi can tim: ");
			scanf("%d",&tuoi);
			for (int i=0,stt=1; i<n; i++){
				if (DS[i].tuoi == tuoi){
					printf("%d. %s\n",stt,DS[i].ten);
					stt++;
				}
			}
			break;
		}
	}
}
	
//	int *p,n;
//	printf("Nhap so phan tu cua mang:");
//	scanf("%d",&n);
//	p=(int*)malloc(n*sizeof(int));
//	for (int i=0; i<n; i++){
//		printf("Nhap phan tu thu %d",i+1);
//		scanf("%d",p+i);}
//	for (int i=0; i<n; i++){
//		printf("Phan tu thu %d cua mang la: %d\n",i+1,*(p+i));
//		}


