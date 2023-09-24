/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package evenodd;

import java.util.Scanner;

/**
 *
 * @author suni_
 */
public class EvenOdd {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner input=new Scanner(System.in);
        int number;
        System.out.println("Enter a number >>");
        number=input.nextInt();
        if(isEven(number))
            System.out.println(number + " is even");
        else
            System.out.println(number + " is odd");
        
    }

    private static boolean isEven(int number) {
        boolean result;
        if(number %2==1)
            result=false;
        else
            result=true;
        return result;
    }
}




