using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class GameOver : MonoBehaviour
{
    public GameObject GameOverPanel;
  
    void Update()
    {
        if(GameObject.FindGameObjectWithTag("Player") == null){
            GameOverPanel.SetActive(true);
        }
    }

    public void Restart()
    {
        SceneManager.LoadScene("ghostRider");
    }

    public void Quit()
    {
        SceneManager.LoadScene("Clicker");
    }
}
