// Program Game Pairs Oleh Dicky Giancini
#include <stdio.h>
#include <windows.h>

// Credits : Sunu Ilham & Parisya Shidqi (Untuk Beberapa Referensi Kode) & Dicky Giancini (Maker)
int main(){
	int baris, kolom, a, b, c, d ,e;
	char pilih[4][4];
	char kartu[4][4];
	int kartu1[4][4];
	int baris1, kolom1;

	printf("=================A PAIR GAME==================\n");
	Sleep(2000);
	printf("=========CREATED BY : DICKY GIANCINI==========\n");
	Sleep(2000);
	printf("==============NPM : 17081010062===============\n");
	Sleep(2000);
	printf("===PLEASE WAIT WHEN WE INITIALIZED THE GAME===");
	Sleep(4000);
	system("cls");
	
	printf("Are You Ready??");
	Sleep(2000);
	system("cls");
	printf("3...");
	Sleep(2000);
	printf("2...");
	Sleep(2000);
	printf("1...!\n");
	Sleep(2000);
	
	printf("\nHafalkan!!\n\n");
	
	kartu[0][0]='A';
    kartu[0][1]='B';
    kartu[0][2]='C';
    kartu[0][3]='B';
    kartu[1][0]='A';
    kartu[1][1]='C';
    kartu[1][2]='D';
    kartu[1][3]='E';
    kartu[2][0]='D';
    kartu[2][1]='E';
    kartu[2][2]='F';
    kartu[2][3]='G';
    kartu[3][0]='G';
    kartu[3][1]='F';
    kartu[3][2]='H';
    kartu[3][3]='H';
    
    kesini: 
    
	for (baris=0;baris<4;baris++){
		for (kolom=0;kolom<4;kolom++){
				printf("[%c]", kartu[baris][kolom]);
		}printf("\n");
	}
	Sleep(8000);
	system("cls");
	
	kartu1[0][0]='X';
	kartu1[0][1]='X';
	kartu1[0][2]='X';
	kartu1[0][3]='X';
	kartu1[1][0]='X';
	kartu1[1][1]='X';
	kartu1[1][2]='X';
	kartu1[1][3]='X';
	kartu1[2][0]='X';
	kartu1[2][1]='X';
	kartu1[2][2]='X';
	kartu1[2][3]='X';
	kartu1[2][4]='X';
	kartu1[3][0]='X';
	kartu1[3][1]='X';
	kartu1[3][2]='X';
	kartu1[3][3]='X';
	
	rene:
		
	for (baris=0;baris<4;baris++){
		for (kolom=0;kolom<4;kolom++){
			printf("[%c]", kartu1[baris][kolom]);
		}printf("\n");
	}	
	
	printf("\n");
	printf(" [1]  [2]  [3]  [4]\n [5]  [6]  [7]  [8]\n [9] [10] [11] [12]\n[13] [14] [15] [16]");
	
	printf("\n\n");

	printf("Kartu mana yang akan dibuka? : ");
	scanf("%d", &a);
	printf("Kartu mana lagi yang akan dibuka? : ");
	scanf("%d", &b);
	printf("\n");
	if (a>16){
		printf("Salah Input Mas!");
		Sleep(2000);
		system("cls");
		goto rene;
	}
	else if (b>16){
		printf("Salah Input Mas!");
		Sleep(2000);
		system("cls");
		goto rene;
	}
	if (a==1){
		kartu1[0][0]='A';
	}
	else if (a==2){
		kartu1[0][1]='B';
	}
	else if (a==3){
		kartu1[0][2]='C';
	}
	else if (a==4){
		kartu1[0][3]='B';
	}
	else if (a==5){
		kartu1[1][0]='A';
	}
	else if (a==6){
		kartu1[1][1]='C';
	}
	else if (a==7){
		kartu1[1][2]='D';
	}
	else if (a==8){
		kartu1[1][3]='E';
	}
	else if (a==9){
		kartu1[2][0]='D';
	}
	else if (a==10){
		kartu1[2][1]='E';
	}
	else if (a==11){
		kartu1[2][2]='F';
	}
	else if (a==12){
		kartu1[2][3]='G';
	}
	else if (a==13){
		kartu1[3][0]='G';
	}
	else if (a==14){
		kartu1[3][1]='F';
	}
	else if (a==15){
		kartu1[3][2]='H';
	}
	else if (a==16){
		kartu1[3][3]='H';
	}
	else{
		printf("\n");
	}
	
	if (b==1){
		kartu1[0][0]='A';
	}
	else if (b==2){
		kartu1[0][1]='B';
	}
	else if (b==3){
		kartu1[0][2]='C';
	}
	else if (b==4){
		kartu1[0][3]='B';
	}
	else if (b==5){
		kartu1[1][0]='A';
	}
	else if (b==6){
		kartu1[1][1]='C';
	}
	else if (b==7){
		kartu1[1][2]='D';
	}
	else if (b==8){
		kartu1[1][3]='E';
	}
	else if (b==9){
		kartu1[2][0]='D';
	}
	else if (b==10){
		kartu1[2][1]='E';
	}
	else if (b==11){
		kartu1[2][2]='F';
	}
	else if (b==12){
		kartu1[2][3]='G';
	}
	else if (b==13){
		kartu1[3][0]='G';
	}
	else if (b==14){
		kartu1[3][1]='F';
	}
	else if (b==15){
		kartu1[3][2]='H';
	}
	else if (b==16){
		kartu1[3][3]='H';
	}
	else{
		printf("\n");
	}
	// Jika A ketemu A
	if (a==1&&b==5||a==5&&b==1){
		for (baris1=0;baris1<4;baris1++){
			for (kolom1=0;kolom1<4;kolom1++){
				printf("[%c]", kartu1[baris1][kolom1]);
			}printf("\n");
		}printf("\nCocok!");	
	}
	// B ketemu B
	else if (a==2&&b==4||a==4&&b==2){
			for (baris1=0;baris1<4;baris1++){
				for (kolom1=0;kolom1<4;kolom1++){
					printf("[%c]", kartu1[baris1][kolom1]);
				}printf("\n");
			}printf("\nCocok!");	
		}
	// C = C
	else if (a==3&&b==6||a==6&&b==3){
			for (baris1=0;baris1<4;baris1++){
				for (kolom1=0;kolom1<4;kolom1++){
					printf("[%c]", kartu1[baris1][kolom1]);
				}printf("\n");
			}printf("\nCocok!");	
		}
	// D = D
	else if (a==7&&b==9||a==9&&b==7){
			for (baris1=0;baris1<4;baris1++){
				for (kolom1=0;kolom1<4;kolom1++){
					printf("[%c]", kartu1[baris1][kolom1]);
				}printf("\n");
			}printf("\nCocok!");	
		}
	// E = E
	else if (a==8&&b==10||a==10&&b==8){
			for (baris1=0;baris1<4;baris1++){
				for (kolom1=0;kolom1<4;kolom1++){
					printf("[%c]", kartu1[baris1][kolom1]);
				}printf("\n");
			}printf("\nCocok!");	
		}
	// F = F
	else if (a==11&&b==14||a==14&&b==11){
			for (baris1=0;baris1<4;baris1++){
				for (kolom1=0;kolom1<4;kolom1++){
					printf("[%c]", kartu1[baris1][kolom1]);
				}printf("\n");
			}printf("\nCocok!");	
		}
	// G = G
	else if (a==12&&b==13||a==13&&b==12){
			for (baris1=0;baris1<4;baris1++){
				for (kolom1=0;kolom1<4;kolom1++){
					printf("[%c]", kartu1[baris1][kolom1]);
				}printf("\n");
			}printf("\nCocok!");
		}
	// H = H
	else if (a==15&&b==16||a==16&&b==15){
			for (baris1=0;baris1<4;baris1++){
				for (kolom1=0;kolom1<4;kolom1++){
					printf("[%c]", kartu1[baris1][kolom1]);
				}printf("\n");
			}printf("\nCocok!");	
		}

	else { printf("\n");
	}
	// Jika Semua Sudah Diselesaikan
	
	if (kartu1[0][0]!='X'&&kartu1[0][1]!='X'&&kartu1[0][2]!='X'&&kartu1[0][3]!='X'&&kartu1[1][0]!='X'&&kartu1[1][1]!='X'&&kartu1[1][2]!='X'&&kartu1[1][3]!='X'&&kartu1[2][0]!='X'&&kartu1[2][1]!='X'&&kartu1[2][2]!='X'&&kartu1[2][3]!='X'&&kartu1[3][0]!='X'&&kartu1[3][1]!='X'&&kartu1[3][2]!='X'&&kartu1[3][3]!='X')
	{
		Sleep(3000);
		system("cls");
		printf ("\nSelamat! Anda Menang! Hebat!!");
		goto rene_maneh;
	}
	// Jika A tidak bertemu A
	else {
	if(kartu1[0][0]=='A'&&kartu1[1][0]!='A'||kartu1[0][0]!='A'&&kartu1[1][0]=='A'){
		printf("Jawaban Salah!");
		kartu1[0][0]='X';
		kartu1[1][0]='X';

	}

	// Jika B tidak bertemu B
 	if(kartu1[0][1]=='B'&&kartu1[0][3]!='B'||kartu1[0][3]=='B'&&kartu1[0][1]!='B'){
		printf("Jawaban Salah!");
		kartu1[0][1]='X';
		kartu1[0][3]='X';
	
	}

	// Jika C tidak bertemu C
	if(kartu1[0][2]=='C'&&kartu1[1][1]!='C'||kartu1[0][2]!='C'&&kartu1[1][1]=='C'){
		printf("Jawaban Salah!");
		kartu1[0][2]='X';
		kartu1[1][1]='X';

	}

	// Jika D tidak bertemu D
	if(kartu1[1][2]=='D'&&kartu1[2][0]!='D'||kartu1[1][2]!='D'&&kartu1[2][0]=='D'){
		printf("Jawaban Salah!");
		kartu1[1][2]='X';
		kartu1[2][0]='X';

	}

	// Jika E tidak bertemu E
	if(kartu1[1][3]=='E'&&kartu1[2][1]!='E'||kartu1[1][3]!='E'&&kartu1[2][1]=='E'){
		printf("Jawaban Salah!");
		kartu1[1][3]='X';
		kartu1[2][1]='X';
	
	}

	// Jika F tidak bertemu F
	if(kartu1[2][2]=='F'&&kartu1[3][1]!='F'||kartu1[2][2]!='F'&&kartu1[3][1]=='F'){
		printf("Jawaban Salah!");
		kartu1[2][2]='X';
		kartu1[3][1]='X';

	}

	// Jika G tidak bertemu G
	if(kartu1[2][3]=='G'&&kartu1[3][0]!='G'||kartu1[2][3]!='G'&&kartu1[3][0]=='G'){
		printf("Jawaban Salah!");
		kartu1[2][3]='X';
		kartu1[3][0]='X';

	}

	// Jika H tidak bertemu H
	if(kartu1[3][2]=='H'&&kartu1[3][3]!='H'||kartu1[3][2]!='H'&&kartu1[3][1]=='H'){
		printf("Jawaban Salah!");
		kartu1[3][2]='X';
		kartu1[3][3]='X';

	}
	
	Sleep (3000);
	system("cls");
	goto rene;
	}

	
	rene_maneh:
	Sleep (2000);
	system("cls");
	printf("End, Tekan Enter Untuk Exit");
}

