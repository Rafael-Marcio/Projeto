import random
print("**********************************************")
print("")

numero_aleatorio = random.randint(1, 100)  # Número aleatório entre 1 e 100

def verificar_numero(resposta):
    try:
        float(resposta)  # Tenta converter a resposta para float
        return True  # Se a conversão for bem-sucedida, retorna True
    except ValueError:
        return False  # Se a conversão gerar um ValueError, retorna False

contador = int(10)
print("Acerte um Número entre 1 e 100!!!")


while contador > 1:
    resposta = input("Qual o número?\nR=  ")
    if not verificar_numero(resposta):
            print("Precisa ser um número!!!")
            print("**********************************************")
            print("")
            continue
    resposta = int(resposta)
    if resposta > 100:
         print("**********************************************")
         print("Deve ser um número menor que 100!")
         print("**********************************************")
    else:
        if resposta == numero_aleatorio:
            print("Você acertou!!!")
            break
        else:
            contador -=1
            if contador <= 2:
                if resposta > numero_aleatorio:
                    retorno = resposta - numero_aleatorio
                    print("**********************************************")
                    print(f"O número correto é {retorno} números a baixo!!")
                    print("**********************************************")
                elif resposta < numero_aleatorio:
                    retorno = numero_aleatorio - resposta
                    print("**********************************************")
                    print(f"O número correto é {retorno} números acima!!")
                    print("**********************************************")
                    print("")
                    print(f"Você errou! Resta lhe {contador} tentativas!")
            else:
                  if resposta > numero_aleatorio:
                    print("O número correto é menor!!")
                    print("**********************************************")
                    print(f"Você errou! Resta lhe {contador} tentativas!")
                  elif resposta < numero_aleatorio:
                    print("O número correto é maior!!")
                    print("**********************************************")
                    print("")
                    print(f"Você errou! Resta lhe {contador} tentativas!")
                
              
        


