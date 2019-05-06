#!/bin/bash
declare -a nama_array
declare -a npm_array
declare -a jurusan_array
x=0
y=1
while [ $y == 1 ]
do
  echo "1. Input"
  echo "2. View"
  echo "3. Search"
  echo "4. Exit"
  echo "Pilihan :"
  read pilih
  if (($pilih == 1)); then
    read -p "Nama : " nama_array[$x}
    read -p "NPM : " npm_array[$x}
    read -p "Jurusan : " jurusan_array[$x}
    ((x++))
    y=1
    clear
    fi
    if (($pilih == 2)); then
      if (($x == 0)); then
        printf "Tidak ada data lur!"
        read -n 1
      clear
    else
    clear
    for ((a=0;a<x;a++))
    do
      echo "Nama : ${nama_array[$a]}"
      echo "NPM : "$[npm_array[$a]]
      echo "Jurusan : ${jurusan_array[$a]}"
      done
      y=1
      fi
    fi
  if (($pilih == 3)); then
    if (($x == 0)); then
      printf "Tidak ada data lur!"
      read -n 1
    clear
    else
      printf "Cari sebuah data? Input NPM : "
      read npm
      for ((b=0;b<x;b++))
        do
          if (($npm==$[npm_array[$b]])); then
            printf "Ketemu!"
            echo "Nama : ${nama_array[$b]}"
            echo "NPM : "$[npm_array[$b]]
            echo "Jurusan : ${jurusan_array[$b]}"
          else
            printf "Tidak Ketemu!"
          fi
        done
      fi
   fi
  if (($pilih == 4)); then
    ((y--))
  fi
  if (($pilih > 4)); then
     printf "Salah Menu!"
      y=1
      read -n 1
      clear
  fi
  if (($pilih < 1)); then
    printf "Salah Menu!"
    y=1
    read -n 1
    clear
  fi
done
