using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class SplashScreen : MonoBehaviour
{

    void Start()
    {
        // chama a função assíncrona que levará à próxima tela com um atraso de 2 segundos
        StartCoroutine( "Splashscreen" );

    }


    IEnumerator Splashscreen()
    {
        // aguarda o tempo antes de executar a próxima linha
        yield return new WaitForSeconds(8);

        // Navegar para próxima tela
        SceneManager.LoadScene("Clicker");
    }
}
