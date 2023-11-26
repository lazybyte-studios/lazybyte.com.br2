using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.Audio;


public class MainMenu : MonoBehaviour
{
    public GameObject Menu_pnl;
    bool active = false;



    public AudioMixer audioMixer;
    public void SetVolume(float volume)
      {
        audioMixer.SetFloat("volume", volume);
      }

    public void Mostra()
   {
        if (active == false)
        {
            Menu_pnl.transform.gameObject.SetActive(true);
            active = true;
        }
        else
        {
            Menu_pnl.transform.gameObject.SetActive(false);
            active = false;
        }

    }

 

}
