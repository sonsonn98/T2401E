#include <stdio.h>
#include <malloc.h>
#include <string.h>
struct ds{
			char ten[50];
			int tuoi;
			char dia_chi[100];		
		};
void inDSsinhvien(struct ds *DS,int n);
void check_tuoimax(struct ds *DS,int n);
void check_tenmax(struct ds *DS,int n);
void check_tren20tuoi(struct ds *DS,int n);
void check_theotuoi(struct ds *DS,int n);
int main(){
	//	INPUT thong tin sinh vien va luu vao file
	int n;
	printf("Nhap vao so sinh vien:");
	scanf("%d",&n);
	struct ds *ds_sv=(struct ds *) malloc (n*sizeof(struct ds));
	inDSsinhvien(ds_sv,n);	
	
	int chucnang;
	do{
	printf("Chon mot chuc nang:\n1. Sinh vien co tuoi lon nhat\n2. Sinh vien co ten dai nhat\n");
	printf("3. Danh sach sinh vien lon hon 20 tuoi\n4. Tim kiem thong tin sinh vien theo tuoi\n5. Ket thuc chuong trinh");
	scanf("%d",&chucnang);
	switch(chucnang){
		case 1:	{
			check_tuoimax(ds_sv,n);
			break;	
		}
		case 2:{
			check_tenmax(ds_sv,n);
			break;
		}	
		case 3:{
			check_tren20tuoi(ds_sv,n);
			break;
		}
		case 4:{
			check_theotuoi(ds_sv,n);
			break;
		}
		case 5:{
			printf("Chuong trinh ket thuc");
			break;
		}
		default: 
			break;
		}
		printf("\n");
	}
		while (chucnang !=5);
	}

void inDSsinhvien(struct ds *DS,int n){

		FILE *file;
		file= fopen("C:\\Users\\Son Nguyen\\Documents\\IT\\T2401E\\C\\Slot 18\\ds_sinhvien.txt","w+");
		getchar();
		for (int i=0;i<n;i++){
			printf("Nhap ten sinh vien %d:\n",i+1);
			gets((DS+i) ->ten);
			printf("Nhap tuoi sinh vien %d:\n",i+1);
			scanf("%d",&(DS+i)->tuoi);
			printf("Nhap dia chi sinh vien %d:\n",i+1);
			getchar();
			gets((DS+i) ->dia_chi);
			
			}
		for (int i=0;i<n;i++){
			fprintf(file,"%s_%d tuoi_%s",DS[i].ten,DS[i].tuoi,DS[i].dia_chi);
			fprintf(file,"\n");		
			}
			
		fclose(file);
		}
void check_tuoimax (struct ds *DS,int n){
		char tensv_tuoimax[50];
			strcpy (tensv_tuoimax,DS->ten);
			int tuoi_max=DS->tuoi;
			for (int i=1; i<n;i++){
				if ((DS+i)->tuoi > tuoi_max){
					tuoi_max=(DS+i)->tuoi;
					strcpy (tensv_tuoimax,(DS+i)->ten);
				}
			}
			printf("Sinh vien co tuoi lon nhat la: %s",tensv_tuoimax);
}
void check_tenmax (struct ds *DS,int n){
	char tensv_dainhat[50];
			strcpy (tensv_dainhat,DS->ten);
			for (int i=1; i<n;i++){
				if (strlen(DS->ten) > strlen(tensv_dainhat)){
					strcpy (tensv_dainhat,DS->ten);
				}
			}
			printf("Sinh vien co ten dai nhat la: %s",tensv_dainhat);
		} 

void check_tren20tuoi(struct ds *DS,int n){
	int stt;
	for (int i=0; i<n; i++){
				if (DS[i].tuoi > 20){
					printf("%d. %s - Tuoi: %d\n",stt+1,DS[i].ten,DS[i].tuoi);
					++stt;
					}
				}
	if(stt==0) {
		printf("Khong co sinh vien nao tren 20 tuoi\n");
		}				
	}

void check_theotuoi(struct ds *DS,int n){
	int tuoi;
			printf("Nhap so tuoi can tim: ");
			scanf("%d",&tuoi);
			int stt;
			for (int i=0; i<n; i++){
				if (DS[i].tuoi == tuoi){
					printf("%d. %s\n",stt+1,DS[i].ten);
					++stt;
				}
			}
			if(stt==0) {
				printf("Khong co sinh vien nao trong do tuoi tim kiem");
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


