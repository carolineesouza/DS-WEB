package com.example.atividade3

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade3.ui.theme.Atividade3Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Atividade3Theme {
                Surface(
                    modifier = Modifier.fillMaxSize(),
                    color = Color(0xFF546E9A)
                ) {
                    Column(
                        modifier = Modifier.fillMaxSize(),
                        horizontalAlignment = Alignment.CenterHorizontally,
                        verticalArrangement = Arrangement.SpaceEvenly
                    ) {
                        MyApp()
                        MyApp2()
                    }
                }
            }
        }
    }
}

@Composable
fun MyApp() {
    var time1 by remember { mutableStateOf(0) }

    Column(horizontalAlignment = Alignment.CenterHorizontally) {
        Text(
            text = "Time A",
            style = TextStyle(color = Color.White, fontSize = 32.sp)
        )
        Text(
            text = "$time1",
            style = TextStyle(color = Color.White, fontSize = 48.sp)
        )
        Spacer(modifier = Modifier.height(40.dp))
        CreateCircle {
            time1 += 1
        }
    }
}

@Composable
fun MyApp2() {
    var time2 by remember { mutableStateOf(0) }

    Column(horizontalAlignment = Alignment.CenterHorizontally) {
        Text(
            text = "Time B",
            style = TextStyle(color = Color.White, fontSize = 32.sp)
        )
        Text(
            text = "$time2",
            style = TextStyle(color = Color.White, fontSize = 48.sp)
        )
        Spacer(modifier = Modifier.height(40.dp))
        CreateCircle {
            time2 += 1
        }
    }
}

@Composable
fun CreateCircle(onTap: () -> Unit) {
    Card(
        modifier = Modifier
            .padding(3.dp)
            .size(150.dp)
            .clickable {
                onTap()
                Log.d("Contador", "Botão pressionado")
            },
        shape = CircleShape
    ) {
        Box(
            modifier = Modifier.fillMaxSize(),
            contentAlignment = Alignment.Center
        ) {
            Text(text = "Tap")
        }
    }
}

@Preview(showBackground = true)
@Composable
fun DefaultPreview() {
    Atividade3Theme {
        Surface(
            modifier = Modifier.fillMaxSize(),
            color = Color(0xFF546E9A)
        ) {
            Column(
                modifier = Modifier.fillMaxSize(),
                horizontalAlignment = Alignment.CenterHorizontally,
                verticalArrangement = Arrangement.SpaceEvenly
            ) {
                MyApp()
                MyApp2()
            }
        }
    }
}