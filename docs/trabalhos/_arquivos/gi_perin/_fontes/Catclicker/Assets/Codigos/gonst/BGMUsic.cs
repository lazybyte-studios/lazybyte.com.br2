using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class BGMUsic : MonoBehaviour
{
  private static BGMUsic backgroundmusic;

        void Awake()
         {
            if(backgroundmusic == null)
            {
                
                DontDestroyOnLoad(backgroundmusic);
                backgroundmusic = this;
            }
            else if(backgroundmusic != this)
            {
                Destroy(gameObject);
            }
         }
}
