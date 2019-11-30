#include <stdio.h>
#include <stdlib.h>
#include <string.h>


//--------------NODE STRUCT----------------
struct node
{
	char plat[20];
	char tipe_mobil[50];
	char merk_mobil[50];
	struct node *left;
	struct node *right;
};

typedef struct node node;
//-----------END NODE STRUCT---------------

//-------------QUEUE STRUCT----------------
struct queue
{
	int count;
	long long int pemasukan;
	node *front;
	node *rear;
};

typedef struct queue queue;
//------------END QUEUE STRUCT-------------

//------------FUNCTION DEF-----------------
queue createQueue(void);
node *createNode(void);
int enqueue(queue *myQueue);
void dequeue(queue *myQueue);
void display(queue myQueue);
void display_reverse(queue myQueue);
void viewfront(queue myQueue);
void viewrear(queue myQueue);
void destroy(queue *myQueue);
//----------END FUNCTION DEF---------------

//----------------MAIN---------------------
int main()
{
	int choice, success;
   queue myQueue;

   myQueue=createQueue();
   while(1){
   	system("cls");
    printf("\n-----CAR WASH MENU-----\n");
    printf("\n1. Tambah Antrian");
    printf("\n2. Selesai Cuci");
    printf("\n3. Lihat Antrian");
    printf("\n4. Lihat Antrian dari Belakang");
    printf("\n5. Antrian Terdepan");
    printf("\n6. Antrian Terbelakang");
    printf("\n7. Jumlah Pemasukan");
    printf("\n8. Tutup");
      printf("\n\nEnter your choice: ");
      scanf("%d",&choice);
      printf("\n\n");
      switch(choice){
      	case 1:
            success=enqueue(&myQueue);
            if(success==0){
            	printf("operasi enqueue gagal");
               getch();
            }
            break;
         case 2:
         	dequeue(&myQueue);
            getch();
            break;
         case 3:
         	display(myQueue);
            getch();
            break;
         case 4:
         	display_reverse(myQueue);
         	getch();
         	break;
         case 5:
         	viewfront(myQueue);
         	getch();
         	break;
         case 6:
         	viewrear(myQueue);
         	getch();
         	break;
         case 7:
         	if(myQueue.pemasukan==0){
         		printf("\nKERING LURRRR");
			 }
			else {
				printf("\nPendapatan : %lld", myQueue.pemasukan);
			}
			getch();
			break;
         case 8:
         	destroy(&myQueue);
            printf("\nGarasi Akan Ditutup");
          	exit(1);
         default:printf("\nInvalid Choice\n");break;
      }
   }
   
   return 0;
}
//-------------END MAIN-----------------

//-----CREATE QUEUE-----
queue createQueue(void)
{
 queue myQueue;

 myQueue.count=0;
 myQueue.pemasukan=0;
 myQueue.front=NULL;
 myQueue.rear=NULL;
 return(myQueue);
}
//-----END CREATE QUEUE-----

//-----CREATE NODE-----
node *createNode(void)
{
 node *newPtr;

 newPtr=(node *)malloc(sizeof(newPtr));
 return(newPtr);
}
//-----END CREATE NODE-----

//-----TAMBAH ANTRIAN-----
int enqueue(queue *myQueue)
{
	int antrian;
	char plat[20];
	char tipe_mobil[50];
	char merk_mobil[50];
	int success;
	system("cls");
	fflush(stdin);
	printf("\nMasukkan Plat Mobil(tanpa spasi) :");
    scanf("%s",&plat);
	fflush(stdin);
	printf("\nMasukkan Tipe Mobil (ex Avanza, Innova, Gallardo) : ");
	scanf("%s",&tipe_mobil);
	fflush(stdin);
	printf("\nMasukkan Merk Mobil (ex Toyota, Mitsubishi, McLaren) : ");
	scanf("%s",&merk_mobil);
	fflush(stdin);	
	node *newPtr;
  	newPtr=(node*)malloc(sizeof(node));
  	strcpy(newPtr->plat, plat);
  	strcpy(newPtr->tipe_mobil, tipe_mobil);
  	strcpy(newPtr->merk_mobil, merk_mobil);
  	
	if(myQueue->count>=10) success=0;
	else
		{
  			if(myQueue->front==NULL)
   				{
   					 newPtr->right = NULL;
   					 newPtr->left = NULL;
     				 myQueue->front=newPtr;
     				 myQueue->rear=newPtr;
    				  }
   				else
   					{
       					 newPtr -> right = NULL;
       					 newPtr -> left = myQueue -> rear;
						 myQueue->rear->right=newPtr;
						 myQueue->rear=newPtr;
     				  }
   			 myQueue->count++;
   			 success=1;
 		}
	return success;
}
//-----END TAMBAH ANTRIAN-----

//-----SELESAI CUCI-----
void dequeue(queue *myQueue)
{

	 if(myQueue->count==0) {
	 	printf("\nTidak Ada Antrian Mobil!");
	 }
	 else
	 {
	  node *deletePtr;
	  deletePtr = myQueue->front;
	  myQueue->front=myQueue->front->right;
	  printf("\nMobil Selesai Dicuci : %s",deletePtr->plat);
	  free(deletePtr);
	  myQueue->count--;
	  myQueue->pemasukan += 30000;
	 }
}

//-----END SELESAI CUCI-----

//-----DISPLAY-----
void display(queue myQueue)
{
 node *temp;
 int list=1;
 temp=myQueue.front;
 printf("List Mobil Dari Depan Ke Belakang:\n");
 while(temp!=NULL)
 {
  printf("Antrian Ke : %d", list);
  printf("\nPlat = %s",temp->plat);
  printf("\nTipe = %s",temp->tipe_mobil);
  printf("\nMerk = %s\n\n",temp->merk_mobil);
  temp=temp->right;
  list++;
 }
}
//-----END DISPLAY-----

//-----DISPLAY REVERSE-----
void display_reverse(queue myQueue)
{
 node *temp;
 int list=myQueue.count;
 temp=myQueue.rear;
 printf("List Mobil Dari Belakang Ke Depan Lur :\n");
 while(temp!=NULL)
 {
  printf("Antrian Ke : %d", list);
  printf("\nPlat = %s",temp->plat);
  printf("\nTipe = %s",temp->tipe_mobil);
  printf("\nMerk = %s\n\n",temp->merk_mobil);
  temp=temp->left;
  --list;
 }
if(list==0){
 	printf("\n");
 }
}
//-----END DISPLAY REVERSE-----

//-----FRONT PRINT-----
void viewfront(queue myQueue)
{
	if(myQueue.count==0){
		printf("\nCieee Nggak ada pelanggan");
	}
	else{
		node *temp;
 		temp=myQueue.front;
 		printf("List Mobil Paling Depan ya :\n");
 		printf("\nPlat = %s",temp->plat);
  		printf("\nTipe = %s",temp->tipe_mobil);
  		printf("\nMerk = %s\n\n",temp->merk_mobil);
	}
}
//-----END FRONT PRINT-----

//-----REAR PRINT-----
void viewrear(queue myQueue)
{
	if(myQueue.count==0){
		printf("\nCieee Nggak ada pelanggan");
	}
	else{
		node *temp;
 		temp=myQueue.rear;
 		printf("List Mobil Paling Belakang ya :\n");
 		printf("\nPlat = %s",temp->plat);
  		printf("\nTipe = %s",temp->tipe_mobil);
  		printf("\nMerk = %s\n\n",temp->merk_mobil);
	}
}
//-----REAR OUT-----

//-----DESTROY-----
void destroy(queue *myQueue)
{
 node *temp;

 while(myQueue->count!=0)
 {
  temp=myQueue->front;
  myQueue->front=myQueue->front->right;
  myQueue->count--;
  free(temp);
 }

 myQueue->count=0;
 myQueue->front=NULL;
 myQueue->rear=NULL;
}
//-----END DESTROY-----

