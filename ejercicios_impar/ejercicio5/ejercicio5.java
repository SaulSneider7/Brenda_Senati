import java.util.Scanner;
import java.lang.Math;

public class Main {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Ingrese el primer número: ");
        double numero1 = input.nextDouble();
        System.out.print("Ingrese el segundo número: ");
        double numero2 = input.nextDouble();
        System.out.print("Ingrese el tercer número: ");
        double numero3 = input.nextDouble();

        double suma = numero1 + numero2 + numero3;
        double promedio = suma / 3;
        double raizCuadrada = Math.sqrt(suma);

        System.out.println("Suma de los números: " + suma);
        System.out.println("Promedio de los números: " + promedio);
        System.out.println("Raíz cuadrada de la suma: " + raizCuadrada);
        
        input.close();
    }
}