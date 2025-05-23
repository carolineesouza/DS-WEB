package com.example.atividade1

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.material3.Card
import androidx.compose.material3.CardDefaults
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade1.ui.theme.Atividade1Theme




class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Atividade1Theme {
                MyApp()
            }
                }
            }
        }


@Composable
fun MyApp() {
    Surface(
        modifier = Modifier
            .fillMaxHeight()
            .fillMaxWidth(),
        color = Color(0xFF546E7A)
    ) {
        Column {
            Card(
                modifier = Modifier
                    .padding(20.dp)
                    .fillMaxWidth(),
                colors = CardDefaults.cardColors(
                    containerColor = Color(0xFF546E9A)
                )
            ) {
                Text(
                    text = "[ Nome: João Silva ]\n" +
                            "[ Tel: (11)99999-9999 ]\n" +
                            "[ Email: maria@email.com ]",
                    style = TextStyle(
                        color = Color.Black,
                        fontSize = 22.sp // Diminui um pouco para melhor encaixe
                    )
                )
            }
            Spacer(modifier = Modifier.height(100.dp))
            Card(
                modifier = Modifier
                    .padding(20.dp)
                    .fillMaxWidth(),
                colors = CardDefaults.cardColors(
                    containerColor = Color(0xFF546E9A)
                )
            ) {
                Text(
                    text = "[ Nome: Maria Souza ]\n" +
                            "[ Tel: (21) 98888-8888 ]\n" +
                            "[ Email: maria@email.com ]",
                    style = TextStyle(
                        color = Color.Black,
                        fontSize = 22.sp // Diminui um pouco para melhor encaixe
                    )
                )
            }
        }
    }
}
@Preview(showBackground = true)

@Composable
fun GreetingPreview(){
    Atividade1Theme{
        MyApp()

    }
}


