package com.example.textview2;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.TextView;

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		//  ��java�������
		// ʵ����textView��
		TextView hello = new TextView(this);
		hello.setText("qq:1663034378  hello world");
		
		setContentView(hello);
	}
}
