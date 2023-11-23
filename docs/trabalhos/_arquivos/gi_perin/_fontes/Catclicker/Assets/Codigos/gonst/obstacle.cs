using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class obstacle : MonoBehaviour
{
    private GameObject player;
    //GameObject GameOverPanel2;

    void Start()
    {
        player = GameObject.FindGameObjectWithTag("Player");
        //GameOverPanel2 = GameObject.Find("GameOverPanel2").GetComponent<GameObject>();

    }

    private void OnTriggerEnter2D(Collider2D collision)
    {
        if (collision.tag == "Border")
        {
            Destroy(this.gameObject);
        }
        else if (collision.tag == "Player")
        {
            Destroy(player.gameObject);
            
        }
        //GameOverPanel2.SetActive(true);

        

        //if (collision.tag == "Colisor")
        //{
          //  Debug.Log("colidiu");
        //}

    }
}
