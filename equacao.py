def verificar(resposta):
    try:
        float(resposta)  # Tenta converter a resposta para float
        return True  # Se a conversão for bem-sucedida, retorna True
    except ValueError:
        return False  # Se a conversão gerar um ValueError, retorna False
print('\033[32mSolução para equações de 2° Grau!') 
print("##################################")
equacao = False
while equacao == False:
    va = input('Qual o Número do 1° elemento da sua equação?\n R=   ')
    vb = input('Qual o Número do 2° elemento da sua equação?\n R=   ')
    vc = input('Qual o Número do 3° elemento da sua equação?\n R=   ')
    
    if verificar(va):
        if verificar(vb):
            if verificar(vc):
                a = int(va)
                b = int(vb)
                c = int(vc)
                delta = (b*b) - (4*a*c)
                x1 = (-b + delta**0.5) / (2*a)
                x2 = (-b - delta**0.5) / (2*a)
                print("##################################")
                print("")
                print(f"As raizes da sua equação são: {x1,x2}")
                print("")
                print("##################################")
                equacao = True
            else:
                print("##################################")
                print("")
                print("O 3º elemento precisa ser um número!")
                print("##################################")
                
        else:
            print("##################################")
            print("")
            print("O 2º elemento precisa ser um número!")
            print("##################################")
    else:
        print("##################################")
        print("")
        print("O 1º elemento precisa ser um número!")
        print("##################################")
        