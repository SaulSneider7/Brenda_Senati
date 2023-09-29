package SESION_08;

import javax.swing.*;

public class Main {

    public static void main(String[] args) {
        int op;
        String opcad;

        do {
            opcad = JOptionPane.showInputDialog("Calculadora" +
                    "\n1. Sumar" +
                    "\n2. Restar" +
                    "\n3. Multiplicar" +
                    "\n4. Dividir" +
                    "\n5. Raíz Cuadrada" +
                    "\n6. Factorizar" +
                    "\n7. Salir" +
                    "\nIngrese la opción:");

            op = Integer.parseInt(opcad);

            switch (op) {
                case 1:
                    realizarSuma();
                    break;
                case 2:
                    realizarResta();
                    break;
                case 3:
                    realizarMultiplicacion();
                    break;
                case 4:
                    realizarDivision();
                    break;
                case 5:
                    realizarRaizCuadrada();
                    break;
                case 6:
                    realizarFactorizacion();
                    break;
                case 7:
                    JOptionPane.showMessageDialog(null, "Gracias por usar la calculadora.");
                    System.exit(0);
                default:
                    JOptionPane.showMessageDialog(null, "Opción incorrecta. Por favor, elija una opción válida.");
            }
        } while (true);
    }

    public static void realizarSuma() {
        double numero1 = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el primer número:"));
        double numero2 = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el segundo número:"));
        double resultado = numero1 + numero2;
        JOptionPane.showMessageDialog(null, "Resultado de la suma: " + resultado);
    }

    public static void realizarResta() {
        double numero1 = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el primer número:"));
        double numero2 = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el segundo número:"));
        double resultado = numero1 - numero2;
        JOptionPane.showMessageDialog(null, "Resultado de la resta: " + resultado);
    }

    public static void realizarMultiplicacion() {
        double numero1 = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el primer número:"));
        double numero2 = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el segundo número:"));
        double resultado = numero1 * numero2;
        JOptionPane.showMessageDialog(null, "Resultado de la multiplicación: " + resultado);
    }

    public static void realizarDivision() {
        double numero1 = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el numerador:"));
        double numero2 = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el denominador:"));
        if (numero2 == 0) {
            JOptionPane.showMessageDialog(null, "Error: No se puede dividir por cero.");
        } else {
            double resultado = numero1 / numero2;
            JOptionPane.showMessageDialog(null, "Resultado de la división: " + resultado);
        }
    }

    public static void realizarRaizCuadrada() {
        double numero = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el número para calcular la raíz cuadrada:"));
        if (numero < 0) {
            JOptionPane.showMessageDialog(null, "Error: No se puede calcular la raíz cuadrada de un número negativo.");
        } else {
            double resultado = Math.sqrt(numero);
            JOptionPane.showMessageDialog(null, "Raíz cuadrada: " + resultado);
        }
    }

    public static void realizarFactorizacion() {
        int numero = Integer.parseInt(JOptionPane.showInputDialog("Ingrese un número para factorizar:"));
        if (numero < 0) {
            JOptionPane.showMessageDialog(null, "Error: No se puede factorizar un número negativo.");
        } else {
            String resultado = factorizar(numero);
            JOptionPane.showMessageDialog(null, "Factorización: " + resultado);
        }
    }

    public static String factorizar(int numero) {
        StringBuilder resultado = new StringBuilder();
        int divisor = 2;
        while (numero > 1) {
            if (numero % divisor == 0) {
                resultado.append(divisor).append(" ");
                numero /= divisor;
            } else {
                divisor++;
            }
        }
        return resultado.toString();
    }
}
