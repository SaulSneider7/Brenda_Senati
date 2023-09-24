import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Ingrese un número: ");
        double numero = input.nextDouble();
        double porcentaje = numero * 0.4;

        System.out.println("El 40% de " + numero + " es: " + porcentaje);

        input.close();
    }
}
